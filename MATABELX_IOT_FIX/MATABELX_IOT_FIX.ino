// Script Create with Love By Midnight Studio

//Library
#include <WiFiManager.h> 
#include <WiFi.h>
#include <HTTPClient.h>
#include <ArduinoJson.h>
#include <Wire.h>
#include <LiquidCrystal_I2C.h>

//PinOUT
// #define LED_BUILTIN 2 //Pinout LED in Board
#define Sensor 27 //Pinout Pir Sensor

LiquidCrystal_I2C lcd (0x27, 16,2);  //Adress LCD Display

const int relay1 = 32; //Pinout relay1
const int relay2 = 33; //Pinout relay2
const int relay3 = 25; //Pinout relay3
const int relay4 = 26; //Pinout relay4

//String data
String key = "250903"; //String Token Key
String host = "matabelx.my.id/"; //String Host

void setup() {

  WiFi.mode(WIFI_STA);

  Serial.begin(9600); //serial numb

  WiFiManager wm;

  lcd.begin();
  lcd. backlight ();  //Turn on the backlight on LCD. 
  lcd. print ( "IOT MATABELX." );
  delay(500);
  lcd. setCursor (0, 1);
  lcd. print ( "Starting System..." );
  delay(4000);
  lcd.clear();
  delay(500);
  lcd.clear();
  lcd. print ( "Sambungkan Wifi." );
  
//Pin Mode
  pinMode (Sensor, INPUT);
  pinMode (relay1, OUTPUT);
  pinMode (relay2, OUTPUT);
  pinMode (relay3, OUTPUT);
  pinMode (relay4, OUTPUT);

//Starting Status Pin
  digitalWrite(relay1, LOW);  
  digitalWrite(relay2, LOW);  
  digitalWrite(relay3, LOW);  
  digitalWrite(relay4, LOW);  

//Wifi Conecting
   //
      bool res;
    res = wm.autoConnect("Matabelx Device","matabelx"); // password protected ap

    if(!res) {
        Serial.println("Failed to connect");
        delay(500);
        lcd.clear();
        lcd. print ( "Gagal Terhubung." );
        lcd. setCursor (0, 1);
        lcd. print ( "Wifi..." );
    } 
    else {
        //if you get here you have connected to the WiFi    
      
          Serial.println("Connection OK");
          lcd.clear();
          lcd. print ( "Terhubung dengan" );
          lcd. setCursor (0, 1);
          lcd. print ( "Wifi." );
          delay(1000);
    }


}

void loop() {

  if (WiFi.status() == WL_CONNECTED) {  // KETIKA WIFI TERHUBUNG MAKA AKAN MENAMPILKAN PERINTAH DI BAWAH (WIFI)


        HTTPClient httpRelay; //MEMINTA DATA DARI SERVER
        httpRelay.begin("https://" +String(host)+ "/control.php"); //URL/ALAMAT SERVER
        httpRelay.addHeader("Content-Type", "application/x-www-form-urlencoded");
        int httpResponseCode = httpRelay.POST("token="+key); //PARAMETER TOKEN UNTUK TERSABUNG DENGAN SERVER
        delay(500);   

        if (httpResponseCode > 0) {  // KETIKA MENDAPAT RESPON DARI SERVER MAKA AKAN MENJALANKAN PERINTAH DI BAWAH
              lcd.clear();
              lcd. print ( "IOT MATABELX." );
              lcd. setCursor (0, 1);
              lcd. print ( "System Redy!" );
              String response = httpRelay.getString();
              char json[500];
              response.toCharArray(json,500);
              StaticJsonDocument   <200> doc;
              deserializeJson(doc, json);
              int lampu1 = doc["lampu1"];     // MEMEMASUKAN DATA DARI SERVER KE DALAM VARIABEL
              int lampu2 = doc["lampu2"];     // MEMEMASUKAN DATA DARI SERVER KE DALAM VARIABEL
              int kipas = doc["kipas"];       // MEMEMASUKAN DATA DARI SERVER KE DALAM VARIABEL
              int televisi = doc["televisi"]; // MEMEMASUKAN DATA DARI SERVER KE DALAM VARIABEL

                  if (lampu1 == 1){  // KETIKA MENDAPATKAN RESPON 1 MAKA AKAN MENJALANKAN PERINTAH DI BAWAH
                    digitalWrite(relay1, HIGH);  //MENYALAKAN RELAY 1
                  } else {  //KETIKA  TIDAK MENDAPATKAN RESPON 1 MAKA MENJALANKAN PERINTAH DI BAWAH
                    digitalWrite(relay1, LOW);  //MEMATIKAN REALY 2
                  }
                  
                  if (lampu2 == 1){
                    digitalWrite(relay2, HIGH);
                  } else {
                    digitalWrite(relay2, LOW);
                  }
                  
                  if (kipas == 1){
                    digitalWrite(relay3, HIGH);
                  } else {
                    digitalWrite(relay3, LOW);
                  }
                  
                  if (televisi == 1){
                    digitalWrite(relay4, HIGH);
                  } else {
                    digitalWrite(relay4, LOW);
                  }


        } else {  // PERINTAH KETIKA TIIDAK MENDAPATKAN RESPON DARI SERVER
            lcd.clear();
            lcd. print ( "Gagal meminta" );
            lcd. setCursor (0, 1);
            lcd. print ( "data!" );
            delay(2000);
            delay(100);
            Serial.print("Error on sending POST: ");
            Serial.println(httpResponseCode);
        }
        httpRelay.end();
        delay(1000);

        int val = digitalRead(Sensor);  // MEMBACA DATA SENSOR PIR

        HTTPClient httpSensor; 
        httpSensor.begin("https://" +String(host)+ "/senddata.php?sensor=" + int(val) ); // MENGIRIMKAN DATA SENSOR KEDALAM SERVER
        httpSensor.GET();
        httpSensor.end();
        delay(500);
        

  } else { // PERINTAH DIBAWAH INI DIJALANKAN KETIKA WIFI TIDAK TERHUBUNG (WIFI)
        lcd.clear();
        lcd. print ( "Gagal Terhubung" );
        lcd. setCursor (0, 1);
        lcd. print ( "Dengan wifi" );    
        delay(2000);    

        Serial.println("Error in WiFi connection");
  }
delay(1000);
}