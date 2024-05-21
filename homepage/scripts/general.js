// !YouTube studio to mainpage

function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}
if (getQueryParam('addClass') === 'true') {
    document.getElementById('videos-js').classList.add('hide');
    document.getElementById('studio-main-hide').classList.add('hide');
    document.getElementById('studio-main-show').classList.remove('hide');
}