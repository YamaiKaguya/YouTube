// const videoData = [
//     {
//         imgSrc: "homepage/artifice.jpg",
//         videoTitle: "We sssssssssssSpent 16 Hours on ARTIFICE...",
//         videoDescription: "@sheffaustin @nicofloflolive and I try to kill as many enemies as possible on artifice.",
//     },
// ];

    document.addEventListener('DOMContentLoaded', () => {

        // ?Container element
    const youtubeVideoContainer = document.getElementById("youtube-video-video");

    // ?Function to create structure for a YouTubevideo
    function youtubeChannelVideoStructure(data) {

        //  DUBUG
        console.log('youtubeChannelVideoStructure');
        const channelYoutubeDiv = document.createElement("div");

        const channelYoutubeImg = document.createElement("img");
        channelYoutubeImg.src = data.imgSrc;

        const channelYoutubeTitle = document.createElement("div");
        channelYoutubeTitle.classList.add("channel-youtube-title");
        channelYoutubeTitle.textContent = data.videoTitle;

        // const channelYoutubeStats = document.createElement("div");
        // channelYoutubeStats.classList.add("channel-youtube-stats");
        // channelYoutubeStats.textContent = data.videoDescription;

        channelYoutubeDiv.append(channelYoutubeImg);
        channelYoutubeDiv.append(channelYoutubeTitle);
        // channelYoutubeDiv.append(channelYoutubeStats);

        return channelYoutubeDiv;
    }



    // ?Function to generate video thumbnails
    function generateVideoThumbnails(videoData) {

        //  DUBUG
        console.log('generateVideoThumbnails'); 
        youtubeVideoContainer.innerHTML = '';
        videoData.forEach(video => {
            const videoElement = youtubeChannelVideoStructure(video);
            youtubeVideoContainer.append(videoElement);
        });
    }

    // ?Fetch video data from the server
    fetch('http://localhost:4500/api/videos')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            console.log('Fetched dataaaaaaaaaa:', data);
            generateVideoThumbnails(data);
        })
        .catch(error => console.error('Error fetching data:', error));
});
















    // function generateVideoThumbnails(videoData) {
    //     for (let i = 0; i < videoData.length; i++) {
    //         const videoVideo = youtubeChannelVideoStructure(videoData[i]);
    //         youtubeVideoContainer.append(videoVideo);
    //     }
    // }

// generateVideoThumbnails(videoData);