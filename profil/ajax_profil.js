var blogCount = 0; 

function nextEntry() {
    //jQuery          
          blogCount = blogCount + 1;
          $("#entry").load("includes/user_profile-inc.php", {
            cur: blogCount
          });
    
    }