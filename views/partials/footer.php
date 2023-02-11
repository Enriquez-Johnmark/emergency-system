</div>

	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="/assets/js/jquery-3.5.1.min.js"></script>
	<script src="/assets/js/popper.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables/datatables.min.js"></script>
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/raphael/raphael.min.js"></script>
	<script src="/assets/js/script.js"></script>
	<script src="../../../ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


<script>
	$(document).ready(function () {
    $('.incident').DataTable({
        order: [[1, 'desc']],
    });
});
</script>

<script>
	$(document).ready(function () {
    $('.reports').DataTable();
});
</script>

	<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});



</script>

<script>
	$(document).ready(function () {
         	$(".gallery").magnificPopup({
         		delegate: "a",
         		type: "image",
         		tLoading: "Loading image #%curr%...",
         		mainClass: "mfp-img-mobile",
         		gallery: {
         			enabled: true,
         			navigateByImgClick: true,
         			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
         		},
         		image: {
         			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
         		}
         	});
         });
</script>



<script>
        function fileValidation() {
            var fileInput =
                document.getElementById('chooseFile');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            }
            else
            {
             
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imgPlaceholder').attr('src', e.target.result);
                    };
                     
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    </script>
<!-- <script>




        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgPlaceholder').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#chooseFile").change(function () {
            readURL(this);
        });
    </script> -->

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    // x.innerHTML = "Geolocation is not supported by this browser.";3
	alert('Geolocation is not supported by this browser.')
  }
}

function showPosition(position) {
   document.getElementById("lat").value = position.coords.latitude;
   document.getElementById("long").value = position.coords.longitude;
}
</script>


</body>




</html>
