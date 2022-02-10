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
  var pruebatecnicaformdb = firebase.database().ref("pruebatecnicaform");
  
  // Listen for a submit
  document.getElementById(".pruebatecnicaform").addEventListener("submit", submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
     //   Get input Values
     var placa = getElementVal("placa");
     var horaingreso = getElementVal("horaingreso");
     var nroCono = getElementVal("nroCono");
    console.log(placa, horaingreso, nroCono);
  }
  
const getElementVal = (id) => {
    return document.getElementById(id).value;
}
