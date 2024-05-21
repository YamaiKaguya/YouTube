document.getElementById('close-button').addEventListener('click', function() {
    document.querySelector('.model-background').classList.toggle('hide');
});


document.getElementById('open-button').addEventListener('click', function() {
    document.querySelector('.model-background').classList.remove('hide');
});


document.getElementById('profile-butlon').addEventListener('click', function() {
    document.querySelector('.account-menu').classList.toggle('hide');
});


document.getElementById('upload-file').addEventListener('change', function() {
    document.getElementById('uploadForm').submit();
});




document.getElementById('your-channel').addEventListener('click', function() {
    window.location.href = 'index.php?addClass=true';
});






