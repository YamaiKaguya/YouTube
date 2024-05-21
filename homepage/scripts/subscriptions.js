const subscriptions = [
    {
        profileSrc: "homepage/subscriptions/guitarock.jpg",
        youtuber: "GuitarRock",
        signalIconSrc: "homepage/Tertiary Icons/signal-steam-svgrepo-com (1).svg"
    },
    {
        profileSrc: "homepage/subscriptions/museasia.jpg",
        youtuber: "Muse Asia",
        signalIconSrc: "homepage/Tertiary Icons/signal-steam-svgrepo-com (1).svg"
    },
    {
        profileSrc: "homepage/subscriptions/hololive.jpg",
        youtuber: "Hololive",
        signalIconSrc: "homepage/Tertiary Icons/signal-steam-svgrepo-com (1).svg"
    },  
    {
        profileSrc: "homepage/subscriptions/lofigirl.jpg",
        youtuber: "Lofi Girl",
        signalIconSrc: "homepage/Tertiary Icons/signal-steam-svgrepo-com (1).svg"
    },
    {
        profileSrc: "homepage/subscriptions/musaasiaphil.jpg",
        youtuber: "Muse Asia",
        signalIconSrc: "homepage/Tertiary Icons/signal-steam-svgrepo-com (1).svg"
    },    
    {
        profileSrc: "homepage/subscriptions/Bettii.jpg",
        youtuber: "Bettii",
        signalIconSrc: "homepage/Tertiary Icons/signal-steam-svgrepo-com (1).svg"
    },    
    {
        profileSrc: "homepage/subscriptions/sua.jpg",
        youtuber: "Sua",
        signalIconSrc: "homepage/Tertiary Icons/signal-steam-svgrepo-com (1).svg"
    },
];

const SubscriptionContainer = document.getElementById("subscriptions-js");

function createVideoThumbnail(data) {

    const secondarybuttoncontainer = document.createElement("div");
    secondarybuttoncontainer.classList.add("button-container");

    const secondaryicon = document.createElement("img");
    secondaryicon.classList.add("button-icon")
    secondaryicon.classList.add("special-radius")

    secondaryicon.src = data.profileSrc;
    secondaryicon.alt = "icon";

    const secondarytext = document.createElement("div");
    secondarytext.classList.add("button-text")
    secondarytext.textContent = data.youtuber;

    const secondarysignalicon = document.createElement("img");
    secondarysignalicon.classList.add("subscriptions-signal-icon")
    secondarysignalicon.src = data.signalIconSrc;

    secondarybuttoncontainer.append(secondaryicon);
    secondarybuttoncontainer.append(secondarytext);
    secondarybuttoncontainer.append(secondarysignalicon);

    return secondarybuttoncontainer;
}


function generatesubscrptions() {
    for (let i = 0; i < subscriptions.length; i++) {
        const videoThumbnail = createVideoThumbnail(subscriptions[i]);
        SubscriptionContainer.prepend(videoThumbnail);
    }
}

generatesubscrptions();



