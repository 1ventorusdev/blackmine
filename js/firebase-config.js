import firebase from "firebase/app";
import "firebase/firestore";

// Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyDcHeOlnBTgTahXdh7bqZN4O3bWBlxoDpQ",
    authDomain: "redmine-13f46.firebaseapp.com",
    databaseURL: "https://redmine-13f46.firebaseio.com",
    projectId: "redmine-13f46",
    storageBucket: "redmine-13f46.appspot.com",
    messagingSenderId: "447829552875",
    appId: "1:447829552875:web:94923357e6f69f2e2d18ae"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const db = firebase.firestore();

export default db;
