<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/storage/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/user/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>