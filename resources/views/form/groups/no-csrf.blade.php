<div class="col-md">
    <form method="POST" action="{{route('form.token')}}" name="noCsrfFormSubmit">
        <div class="form-group">
            <label for="noCsrfTitle">CSRF: </label>
            <div class="form-control" id="noCsrfTitle">
                <span>....</span>
            </div>
        </div>

        <div class="form-group">
            <label for="noCsrfName">Name: </label>
            <input type="text" class="form-control" name="noCsrfName" id="noCsrfName" value="{{@$old['noCsrfName']}}">
        </div>

        <div class="form-group">
            <div>
                <input type="submit" class="btn btn-primary" name="noCsrfSubmit">
            </div>
        </div>
    </form>
</div>

