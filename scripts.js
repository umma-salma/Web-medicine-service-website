const navBar = document.querySelector('#navigation-bar');
const navItems = document.querySelectorAll('.fixed-navbar');
const logoName = document.querySelector('.logo-name');


// Navbae fixed
//window.addEventListener("scroll", function () {
//   if (window.pageYOffset > 80) {
//     navBar.classList.add("navbar-fixed");
//     navItems.forEach(function(e){
//       e.style.color = 'white';
//       logoName.style.textShadow = '1px 3px #fff';
//     });

//   } else {
//     navBar.classList.remove("navbar-fixed");
//     navItems.forEach(function(e){
//       e.style.color = '#0f3057';
//       logoName.style.textShadow = '1px 3px #323232';
//     });
//   }
// });

// End of navbar fixed

// Search button

$(document).ready(function(){
  var submitIcon = $('.searchbox-icon');
  var inputBox = $('.searchbox-input');
  var searchBox = $('.searchbox');
  var isOpen = false;
  submitIcon.click(function(){
    if(isOpen == false){
      searchBox.addClass('searchbox-open');
        inputBox.focus();
          isOpen = true;
            }else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });
    submitIcon.mouseup(function(){
      return false;
    });
    searchBox.mouseup(function(){
      return false;
    });

  $(document).mouseup(function(){
    if(isOpen == true){
      $('.searchbox-icon').css('display','block');
        submitIcon.click();
      }
    });
});


function buttonUp(){
  var inputVal = $('.searchbox-input').val();
  inputVal = $.trim(inputVal).length;
  if( inputVal !== 0){
    $('.searchbox-icon').css('display','none');
  } else {
    $('.searchbox-input').val('');
    $('.searchbox-icon').css('display','block');
    }
}
