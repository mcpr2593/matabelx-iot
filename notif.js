/*
 *
 *  Push Notifications codelab
 *  Copyright 2015 Google Inc. All rights reserved.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License
 *
 */

/* eslint-env browser, es6 */

'use strict';

const applicationServerPublicKey = `BCugVXmjFcocli4XNp1zw-pWs2Hq6fW--3uNMaPeR16LqRNYG6n0mVy0ERw9fi-JWq5-pfVBzta37rqmbQM6-wE`

const pushButton = document.querySelector('.js-push-btn');

let isSubscribed = false;
let swRegistration = null;

function urlB64ToUint8Array(base64String) {
  const padding = '='.repeat((4 - base64String.length % 4) % 4);
  const base64 = (base64String + padding)
    .replace(/\-/g, '+')
    .replace(/_/g, '/');

  const rawData = window.atob(base64);
  const outputArray = new Uint8Array(rawData.length);

  for (let i = 0; i < rawData.length; ++i) {
    outputArray[i] = rawData.charCodeAt(i);
  }
  return outputArray;
}



function updateBtn() {
  if (Notification.permission === 'denied') {
    pushButton.textContent = 'Notifikasi di blokir';
    pushButton.disabled = true;
    updateSubscriptionOnServer(null);
    return;
  }

  if (isSubscribed) {
    pushButton.textContent = 'Notifikasi Aktif';
  } else {
    pushButton.textContent = 'Izinkan Notifikasi';
  }

  pushButton.disabled = false;
}

function updateSubscriptionOnServer(subscription) {
  // TODO: Send subscription to application server

  const subscriptionJson = document.querySelector('.js-subscription-json');
  const subscriptionDetails =
    document.querySelector('.js-subscription-details');

  if (subscription) {
    subscriptionJson.textContent = JSON.stringify(subscription);
    subscriptionDetails.classList.remove('is-invisible');
  } else {
    subscriptionDetails.classList.add('is-invisible');
  }
}

function subscribeUser() {
  const applicationServerKey = urlB64ToUint8Array(applicationServerPublicKey);
  swRegistration.pushManager.subscribe({
      userVisibleOnly: true,
      applicationServerKey: applicationServerKey
    })
    .then(function (subscription) {
      console.log('User is subscribed.');

      updateSubscriptionOnServer(subscription);

      isSubscribed = true;

      updateBtn();
    })
    .catch(function (error) {
      console.error('Failed to subscribe the user: ', error);
      updateBtn();
    });
}

function initializeUI() {
  pushButton.addEventListener('click', function () {
    pushButton.disabled = true;
    if (isSubscribed) {
      // TODO: Unsubscribe user
    } else {
      subscribeUser();
    }
  });


  // Set the initial subscription value
  swRegistration.pushManager.getSubscription()
    .then(function (subscription) {
      isSubscribed = !(subscription === null);

      if (isSubscribed) {
        console.log('User IS subscribed.');
      } else {
        console.log('User is NOT subscribed.');
      }

      updateBtn();
    });
}

if ('serviceWorker' in navigator && 'PushManager' in window) {
  console.log('Service Worker and Push are supported');

  navigator.serviceWorker.register('sw.js')
    .then(function (swReg) {
      console.log('Service Worker is registered', swReg);

      swRegistration = swReg;
      initializeUI()
    })
    .catch(function (error) {
      console.error('Service Worker Error', error);
    });
} else {
  console.warn('Push messaging is not supported');
  pushButton.textContent = 'Push Not Supported';
}

const title = 'MatabelX Notification!';
const options = {
    body: 'Ruangan Kosong Masih Ada Perangkat Yang Aktif!',
    icon: 'assets/images/favicon.png',
    badge: 'assets/images/favicon.png'
}

setInterval(loadData , 60000)

function loadData() {
  fetch('datadevice.php')
  .then((response) => response.json())
  .then((data) => {
    if(data.pir_sensor == 0){
      console.log('terdeteksi ruangan kosong')
      if(data.lampu1 == 1) {
        console.log('Ruangan Kosong Masih Ada Perangkat Yang Aktif!')
        notif()
      } else if(data.lampu2 == 1){
        console.log('Ruangan Kosong Masih Ada Perangkat Yang Aktif!')
        notif()
      } else if(data.kipas == 1){
        console.log('Ruangan Kosong Masih Ada Perangkat Yang Aktif!')
        notif()
      } else if(data.televisi == 1){
        console.log('Ruangan Kosong Masih Ada Perangkat Yang Aktif!')
        notif()
      } else {
        console.log('Semua Perangkat non aktif')
      }
      
    } else {
      console.log("Ruangan Berisi")
    }
  })

}


async function notif () {
  const notification = await navigator.serviceWorker.ready
  notification.showNotification(title, options)
}