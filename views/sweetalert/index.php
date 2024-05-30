<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>SweetAlert2</h1>
      </div>
      <div class="col-sm-6">
        
      </div>
    </div>
  </div>
</section>

<section class="content-header">
  <div class="container-fluid">
    <div class="card card-success card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-edit"></i>
          SweetAlert2 Examples
        </h3>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-success swalDefaultSuccess">
          Launch Success
        </button>
        <button type="button" class="btn btn-info swalDefaultInfo">
          Launch Info 
        </button>
        <button type="button" class="btn btn-danger swalDefaultError">
          Launch Error 
        </button>
        <button type="button" class="btn btn-warning swalDefaultWarning">
          Launch Warning 
        </button>
        <button type="button" class="btn btn-default swalDefaultQuestion">
          Launch Question 
        </button>
        <div class="text-muted mt-3">
          For more examples look at <a href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
$(function() {
    $('.swalDefaultSuccess').click(function() {
        Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
        });
    });
    $('.swalDefaultInfo').click(function() {
        Swal.fire("SweetAlert2 is working!");
    });
    $('.swalDefaultError').click(function() {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
            footer: '<a href="#">Why do I have this issue?</a>'
        });
    });
    $('.swalDefaultWarning').click(function() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
            }
        });
    });
    $('.swalDefaultQuestion').click(function() {
        Swal.fire({
            title: "The Internet?",
            text: "That thing is still around?",
            icon: "question"
        });
    });

});
</script>
