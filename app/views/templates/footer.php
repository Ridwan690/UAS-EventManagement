  
  </div>
  <footer class="footer bg-light text-dark text-center py-3">
    <div class="container">
      <p>&copy; 2023 Event Management. All rights reserved.</p>
    </div>
  </footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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