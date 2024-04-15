<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s" data-toggle="modal" data-target="#exampleModal" type="button">
    <div class="create-event-item rounded">
            <i class="fas fa-plus me-3"></i>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal mt-4">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <label>Place</label>
                        <input type="text" class="form-control" placeholder="Place">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    });
</script>
