const thumbnailData = [
  {
    thumbnailSrc: "homepage/thumbnails/sua.jpg",
    videoLength: "1:56",
    profileSrc: "homepage/profiles/sua.jpg",
    title: "To. X - 태연 (cover)",
    youtuber: "sua",
    views: "219,198 views · 3 months ago",
  },  
  {
    thumbnailSrc: "homepage/thumbnails/Coderized.jpg",
    videoLength: "10:25",
    profileSrc: "homepage/profiles/Coderized.jpg",
    title: "The purest coding style, where bugs are near impossible",
    youtuber: "Coderized",
    views: "798K views 7 · months ago"
  },
  {
    thumbnailSrc: "homepage/thumbnails/Bettii.jpg",
    videoLength: "10:01",
    profileSrc: "homepage/profiles/Bettii.jpg",
    title: "ILLIT (아일릿) Magnetic cover 🫧 by Bettii",
    youtuber: "Bettii 杯緹",
    views: "196K views · 3 weeks ago"
  },
  {
    thumbnailSrc: "homepage/thumbnails/maya.jpg",
    videoLength: "10:33",
    profileSrc: "homepage/profiles/maya.jpg",
    title: "just the two of us ~ (maya cover )",
    youtuber: "Mayaまや",
    views: "609K views · 1 year ago"
  },
  {
    thumbnailSrc: "homepage/thumbnails/(リ。・ω・。サ)アイドル大好き.jpg",
    videoLength: "1:43",
    profileSrc: "homepage/profiles/(リ。・ω・。サ)アイドル大好き.jpg",
    title: "Let's chill the music with Hanni (pocket locket)",
    youtuber: "(リ。・ω・。サ)アイドル大好き",
    views: "359K views · 7 months ago"
  },   
  {
    thumbnailSrc: "homepage/thumbnails/k.jpg",
    videoLength: "1:34",
    profileSrc: "homepage/profiles/k.jpg",
    title: "bubble gum by clairo cover but it's dark and im tired",
    youtuber: "k",
    views: "702K views · 7 months ago"
  },
];


const videoContainer = document.getElementById("videos-js");

function createVideoThumbnail(data) {

  const videoThumbnail = document.createElement("div");
  videoThumbnail.classList.add("Video-thumbnail");

  const imageContainer = document.createElement("div");
  imageContainer.classList.add("Image");

  const thumbnailImage = document.createElement("img");
  thumbnailImage.classList.add("Thumbnail");
  thumbnailImage.src = data.thumbnailSrc;
  thumbnailImage.alt = "Video Thumbnail";

  const videoLength = document.createElement("div");
  videoLength.classList.add("Video-length");
  videoLength.textContent = data.videoLength;

  imageContainer.append(thumbnailImage);
  imageContainer.append(videoLength);


  const layoutGrid = document.createElement("div");
  layoutGrid.classList.add("Layout-Grid");

  const videoProfile = document.createElement("div");
  videoProfile.classList.add("Video-profile");

  const profileImage = document.createElement("img");
  profileImage.classList.add("Profile-picture");
  profileImage.src = data.profileSrc;
  profileImage.alt = "Profile Picture";

  videoProfile.appendChild(profileImage);


  const videoInformation = document.createElement("div");
  videoInformation.classList.add("Video-information");



  const title = document.createElement("p");
  title.classList.add("Title");
  title.textContent = data.title;



  const youtuber = document.createElement("p");
  youtuber.classList.add("Youtuber");
  youtuber.textContent = data.youtuber;



  const views = document.createElement("p");
  views.classList.add("Views");
  views.textContent = data.views;

  videoInformation.appendChild(title);
  videoInformation.appendChild(youtuber);
  videoInformation.appendChild(views);


  
  layoutGrid.appendChild(videoProfile);
  layoutGrid.appendChild(videoInformation);

  videoThumbnail.appendChild(imageContainer);
  videoThumbnail.appendChild(layoutGrid);

  return videoThumbnail;
}

function generateVideoThumbnails() {
  for (let i = 0; i < thumbnailData.length; i++) {
    const videoThumbnail = createVideoThumbnail(thumbnailData[i]);
    videoContainer.append(videoThumbnail);
  }
}

for (let i = 0; i < 4; i++) {
  generateVideoThumbnails();
}