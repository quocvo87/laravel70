<div class="col-md">
    <form method="POST" action="{{route('form.token')}}" name="formSubmit">
        @csrf
        <div class="form-group">
            <label for="csrfTitle">CSRF: </label>
            <div class="form-control" id="csrfTitle">
                <span>{{csrf_token()}}</span>
            </div>
        </div>

        <div class="form-group">
            <label for="csrfName">Name: </label>
            <input type="text" class="form-control" name="csrfName" id="csrfName" value="{{@$old['csrfName']}}">
        </div>

        <div class="form-group">
            <div>
                <input type="submit" class="btn btn-primary" name="csrfSubmit">
            </div>
        </div>
    </form>
</div>

