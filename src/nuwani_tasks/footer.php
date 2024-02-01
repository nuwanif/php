

<footer>
        
        <div class="cards2">
          <div class="card">
            <img src="images/frame1/logo.gif" alt="image"  class="rounded mx-auto d-block img-fluid" width="75" height="50">  
            <p style="text-align: center;"><br>Tourism Hotline<br>1912</p>
          </div>
      
          <div class="card">
          <p style="text-align: center;">Quick Links</p>
          <a href="">Subscribe</a>
          <a href="">Contact Us          </a>
          <a href="">Important Notices          </a>
          <a href="">Terms of Use</a>
          <a href="">Complaints</a>
          <p style="text-align: center;"><br><br>&copy; 2024 All Rights Reserved by Team 12</p>
          

          </div>
      
          <div class="card">
            <p style="text-align: center;">Follow Us On</p>   
           <a href=""> <img src="images/frame3/facebook.png" alt="image"  width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/instagram.png" alt="image" width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/twitter.png" alt="image" width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/whatsapp.png" alt="image" width="50" height="50" style="padding: 5px;"></a>

              
          </div>
       
      
      
          
        </div>
        
        <?php
// Get the current file name using basename and $_SERVER['PHP_SELF']
$current_file_name = basename($_SERVER['PHP_SELF']);

// Get the last modification time of the current file
$file_last_modified = filemtime($current_file_name);

// Display the last modified time in a human-readable format
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified) . "\n";
?>

      </footer>
  </div>   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
