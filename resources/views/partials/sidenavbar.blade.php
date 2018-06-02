
             <div class="sidenav">
                   <a href="#">Dashboard </a>
                    <a href="{{ route('user/adminpanel') }}">Main Page </a>
                    <!-- <a href="{{ route('user/adminEditUser') }}">Admin Edit User</a> -->
                    <button class="dropdown-btn">User Accounts 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                       <a href="{{ route('user/adminEditUser') }}">Admin User List</a>
                       <a href="{{ route('user/adminpaneledituser') }}">Edit User Info</a>
                       <a href="{{ route('user/adminDeleteUser') }}">Delete User</a>
                    </div>
                    <a href="{{ route('user/adminpurchases') }}">User Purchases/ Delete Page</a>
                    <button class="dropdown-btn">Product Stock 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                       <a href="{{ route('user/adminstock') }}">Product Stock</a>
                       <a href="{{ route('user/adminNewProduct') }}">Create New Product</a>
                       <a href="{{ route('user/adminDeleteProduct') }}">Delete Product Stock</a>
                    </div>
                       <a href="#contact">new page</a>
                       <a href="#contact">new page</a>
                   </div>
              </div>

              <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>