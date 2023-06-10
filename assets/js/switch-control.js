document.getElementById("device1").addEventListener("change", (e) => {
  this.checkboxValue = e.target.checked ? "on" : "off"
  if (this.checkboxValue == "on") {
    window.location = "actions.php?device=1&state=1"
    console.log(this.checkboxValue);
  } else {
    window.location = "actions.php?device=1&state=0"
  }
})

document.getElementById("device2").addEventListener("change", (e) => {
    this.checkboxValue = e.target.checked ? "on" : "off"
    if (this.checkboxValue == "on") {
      window.location = "actions.php?device=2&state=1"
      console.log(this.checkboxValue);
    } else {
      window.location = "actions.php?device=2&state=0"
    }
  })
  
  document.getElementById("device3").addEventListener("change", (e) => {
    this.checkboxValue = e.target.checked ? "on" : "off"
    if (this.checkboxValue == "on") {
      window.location = "actions.php?device=3&state=1"
      console.log(this.checkboxValue);
    } else {
      window.location = "actions.php?device=3&state=0"
    }
  })

  document.getElementById("device4").addEventListener("change", (e) => {
    this.checkboxValue = e.target.checked ? "on" : "off"
    if (this.checkboxValue == "on") {
      window.location = "actions.php?device=4&state=1"
      console.log(this.checkboxValue);
    } else {
      window.location = "actions.php?device=4&state=0"
    }
  })