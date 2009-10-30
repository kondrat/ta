$(document).ready(function(){
		// We use the jQuery selection syntax to find the selectall checkbox on the page
		// (note the '#' which signifies ID), and we tell jQuery to call the selectAll()
		// function every time someone clicks on the checkbox (we'll get to Events in a
		// future article).
	$("#selectall").click(selectAll);
});

			// This function will get called every time someone clicks on the selectall checkbox
	function selectAll() {
			// this line determines if the selectall checkbox is checked or not. The attr()
			// function, discussed in a future article, simply returns an attribute on the
			// given object. In this case, it returns a boolean if true, or an undefined if
			// it's not checked.
		var checked = $("#selectall").attr("checked");
			// Now we use the jQuery selection syntax to find all the checkboxes on the page
			// with the selectable class added to them (each row's checkbox). We get an array
			// of results back from this selection, and we can iterate through them using the
			// each() function, letting us work with each result one at a time. Inside the
			// each() function, we can use the $(this) variable to reference each individual
			// result. Thus, inside each loop, it finds the value of each checkbox and matches
			// it to the selectall checkbox.
		$(".selectable").each(function(){
			var subChecked = $(this).attr("checked");
					if (subChecked != checked) {
						$(this).click();
					}
				});
		}
/*
  $(document).ready(function(){
    
    $("button").click(function () {
      $("p.tt").toggle();
    });

  });

$(document).ready(function(){ 
    $("td").mouseover(function () {
      $(this).css("background","#CEE7FF");
    });
});

*/
$(document).ready(function(){ 
	
	var tdColor = 0;
	var tdBorder = 0;
	 
	$("td").hover(function(){
		tdColor = $(this).css("background-color");
		tdBorder = $(this).css("border");
		//alert(tdColor);
		$(this).css("background","#CEE7FF").css("border","1px solid red");//#CEE7FF
		},
		function(){
		$(this).css("background",tdColor).css("border",tdBorder);
		}
	);
});

/*
$(document).ready(function(){
	$("img").each(function () {
			
		alert( $(this).attr("class") );
	});
});
*/

$(document).ready(function(){
	$("img.small").click(function () {
			var $tt = 0;
			if ( $(this).parent().hasClass("testDiv") ) {
				$(this).parent().append("<p>Hello</p>");
			}

			$("img.logo").attr('src', '/ta/img/' + $(this).attr("id") + '.jpg' );

			
			
		

	});
});
//------------------------------------------------------------------------------------
$(document).ready(function(){
	$("#thumbnail li a").click(function(){
		$("#large img").hide().attr( {"src": $(this).attr("href"), "title": $("> img", this).attr("title")} );
		$("#large h2").html($("> img", this).attr("title"));
		return false;
	});
	$("#large>img").load(function(){$("#large>img:hidden").fadeIn("slow")});
});

$(document).ready(function(){
	$("#thumbnail li a").click(function(){
		$(".h2").fadeOut("slow");
	});
});

//-----------------------------------------------------------------------------------

      $(document).ready(function(){

          $(".btn-slide").click(function(){

              $("#panel").slideToggle("slow");

              $(this).toggleClass("active");

          });

      });


      $(document).ready(function(){              // по окончанию загрузки страницы

          $('#example-1').click(function(){      // вешаем на клик по элементу с id = example-1

              $(".h2").load('files/example.html'); // загрузку HTML кода из файла example.html               

          })

      });

// ajax ---------------------------------------------------------------------------
/*
      $(document).ready(function(){                          // по завершению загрузки страницы

          $('#example-3').click(function(){                  // вешаем на клик по элементу с id = example-3
          	
          	//$(this).load('files/example.html');

              $.post('files/example2.xml', {}, function(xml){  // загрузку XML из файла example.xml   

                  $('#example-3').html('');

                  $(xml).find('note').each(function(){       // заполняем DOM элемент данными из XML

                      $('#example-3').append('To: '   + $(this).find('to').text() + '<br/>')

                                     .append('From: ' + $(this).find('from').text() + '<br/>')

                                     .append('<b>'    + $(this).find('heading').text() + '</b><br/>')

                                     .append(           $(this).find('body').text() + '<br/>');

                  });

              }, 'xml');                                     // указываем явно тип данных

          })

      });
*/
jQuery(document).ready(function(){
	 jQuery('#example-3').click(function(){
		 jQuery.post('files/example2.xml', {}, function(xml){
		 	 jQuery('#example-3').html('<img src="img/ajax-loader.gif" />');
		 	 
				jQuery(xml).find('note').each(function(){
					jQuery('#example-3').append('To: ' + $(this).find('to').text() + '<br/>')
						.append('From: ' + $(this).find('from').text() + '<br/>')
						.append('<b>' + $(this).find('heading').text() + '</b><br/>')
						.append( $(this).find('body').text() + '<br/>');
					jQuery('#example-3 img').hide();
			 	});
			 	
		 }, 'xml');
		
	})
});

    jQuery(document).ready(function(){
        jQuery('#example-4').click(function(){
            jQuery.getJSON('files/example4.json', {}, function(json){
                jQuery('#example-4').html('<img src="img/ajax-loader.gif" />');
                jQuery('#example-4').append('To: '   + json.note.to + '<br/>')
                                    .append('From: ' + json.note.from + '<br/>')
                                    .append('<b>'    + json.note.heading + '</b><br/>')
                                    .append(           json.note.body + '<br/>');
                jQuery('#example-4 img').hide();
            });                
        })
    });
