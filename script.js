const firebaseConfig = {
    apiKey: "AIzaSyDBs2vYlcN25x0ufiqD2ASIZsLoWJdrVq4",
    authDomain: "pruebatecnica-85d87.firebaseapp.com",
    databaseURL: "https://pruebatecnica-85d87-default-rtdb.firebaseio.com",
    projectId: "pruebatecnica-85d87",
    storageBucket: "pruebatecnica-85d87.appspot.com",
    messagingSenderId: "297845012994",
    appId: "1:297845012994:web:3e6413a5a4717b833ec51b",
    measurementId: "G-8L8CQZSBHF"
  };
  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  
  // Refernece contactInfo collections
  let CarInfo = firebase.database().ref("datos");
  
  // Listen for a submit
  document.querySelector(".pruebatecnicaform").addEventListener("submit", submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
     //   Get input Values
     let placa = document.querySelector(".placa").value;
     let horaingreso = document.querySelector(".horaingreso").value;
     let nroCono = document.querySelector(".nroCono").value;
    console.log(placa, horaingreso, nroCono);
  
    saveCarInfo(placa, horaingreso, nroCono);
  
    document.querySelector(".pruebatecnicaform").reset();
  }
  
  // Save datos to Firebase
  function saveCarInfo(placa, horaingreso, nroCono) {
    let newCarInfo = CarInfo.push();
  
    newCarInfo.set({
      placa: placa,
      horaingreso: horaingreso,
      nroCono: nroCono,
    });
  }