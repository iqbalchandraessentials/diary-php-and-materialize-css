$(document).ready(function(){
    $('.sidenav').sidenav();
  });

	


$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
});



$(document).ready(function() {
	 $('.btn-floating').preventDefault();
});



$(document).ready(function() {
	$('input#rangkuman, textarea#cerita').characterCounter();
});
        


$(document).ready(function(){
    $('.datepicker').datepicker({
    	autoClose:true,
    	format: 'dddd, dd-mmmm-yyyy'
    });
  });



const materialboxed = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialboxed);












	function tampilkanPreview(foto,idpreview)
	{
	  var gb = foto.files;
	  for (var i = 0; i < gb.length; i++)
	  {
	    var gbPreview = gb[i];
	    var imageType = /image.*/;
	    var preview=document.getElementById(idpreview);
	    var reader = new FileReader();
	    if (gbPreview.type.match(imageType))
	    {
	      //jika tipe data sesuai
	      preview.file = gbPreview;
	      reader.onload = (function(element)
	      {
	        return function(e)
	        {
	          element.src = e.target.result;
	        };
	      })(preview);
	      //membaca data URL gambar
	      reader.readAsDataURL(gbPreview);
	    }
	      else
	      {
	        //jika tipe data tidak sesuai
	        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
	      }
	  }
	}