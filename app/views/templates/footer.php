<footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <p>&copy; 2023 Event Management. All rights reserved.</p>
    </div>
  </footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<script>
    document.getElementById('images').addEventListener('change', function(event) {
        var previewContainer = document.querySelector('.image-preview');
        previewContainer.innerHTML = ''; // Bersihkan pratinjau sebelumnya
    
        var files = event.target.files;
        for (var i = 0; i < files.length; i++) {
          var file = files[i];
          var reader = new FileReader();
    
          reader.onload = function(event) {
            var imgElement = document.createElement('img');
            imgElement.src = event.target.result;
            imgElement.classList.add('preview-image');
            previewContainer.appendChild(imgElement);
          }
    
          reader.readAsDataURL(file);
        }
      });
</script>
</body>
</html>