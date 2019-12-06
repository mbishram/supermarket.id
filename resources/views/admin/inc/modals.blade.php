<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="/">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Create Posts Modal-->
<div class="modal fade" id="createPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Post!</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Pelatihan #1 : Bootstrap and More!">
          </div>
          <div class="form-group">
            <label for="ckeditor1">Body</label>
            <textarea class="form-control" id="ckeditor1" rows="5"></textarea>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" type="button" data-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Posts Modal-->
<div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Pelatihan #1 : Bootstrap and More!" value="Pelatihan #1 : Pelatihan pelatihan pelatihan">
          </div>
          <div class="form-group">
            <label for="ckeditor2">Body</label>
            <textarea class="form-control" id="ckeditor2" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non est erat. Vestibulum posuere, quam sit amet commodo posuere, ipsum tellus elementum dui, tempor efficitur odio arcu eu velit. Nunc hendrerit libero tortor, vel elementum nisi ultrices ac. Etiam pulvinar orci vel turpis pharetra, a pellentesque elit ultricies. Pellentesque pellentesque metus sed tellus luctus sodales a in enim. Phasellus accumsan odio ut nisi elementum, vel lobortis est ultricies. Quisque eleifend odio tortor. Fusce facilisis, felis a feugiat accumsan, lacus metus condimentum libero, consectetur porttitor arcu neque sit amet purus. Mauris sit amet orci ac urna tempus tempor. Nullam vel aliquam quam. Quisque nec euismod eros. Mauris consequat venenatis arcu eu auctor.

            Nunc ligula nibh, fermentum a nulla non, ornare finibus nisi. Mauris luctus augue vel hendrerit ullamcorper. Fusce elit diam, egestas id purus ut, dictum aliquet metus. Sed gravida turpis at libero luctus, rhoncus maximus ante hendrerit. Quisque ac molestie turpis, porta ullamcorper dolor. Praesent eleifend semper tellus nec luctus. Duis elementum, nisl at commodo porta, magna augue molestie felis, sed faucibus nisi nisl congue metus. Fusce lacinia pretium augue non facilisis. Vestibulum felis odio, luctus ac magna vel, auctor maximus nulla. Aliquam et dolor nec dolor imperdiet fermentum. Aenean eleifend nunc sapien, ut egestas augue varius non. Etiam lobortis odio mauris, sit amet vulputate augue gravida eget. Proin tincidunt urna mi, id cursus est malesuada sed. Sed et viverra diam. Etiam ultricies tempus dui, quis ornare urna ullamcorper ut.</textarea>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">blog1.png</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" type="button" data-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>