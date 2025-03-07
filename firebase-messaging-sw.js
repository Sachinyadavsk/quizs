importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js');

  const firebaseConfig = {
    apiKey: "AIzaSyDd36xVIDun6kL1C1nclHC9LvtwQ6qPaJs",
    authDomain: "zettaquiz-3c082.firebaseapp.com",
    projectId: "zettaquiz-3c082",
    storageBucket: "zettaquiz-3c082.firebasestorage.app",
    messagingSenderId: "1009658203915",
    appId: "1:1009658203915:web:65761b5838dada19819c0e",
    measurementId: "G-8NDBMR5R1N"
  };

firebase.initializeApp(firebaseConfig);
const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    //console.log(payload);
    const notification=JSON.parse(payload);
    const notificationOption={
        body:notification.body,
        icon:notification.icon
    };
    return self.registration.showNotification(payload.notification.title,notificationOption);
});