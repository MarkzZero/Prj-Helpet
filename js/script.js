/* Menu Fixo */
const menu = document.querySelector('nav');

function activeScroll(){
    menu.classList.toggle('ativo', scrollY > 100);
}

window.addEventListener('scroll', activeScroll);


/* Link para o topo */ 
const botao = document.querySelector("#link-top");

window.addEventListener("scroll", function (event) {
  if (this.window.scrollY == 0){
    botao.classList.remove("visible");
  }else{
    botao.classList.add("visible");
  }
});


/* Item do menu destacado na rolagem da página */

// Cache selectors
var lastId,
    topMenu = $(".nav-list"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }                   
});
