@if(count($errors) > 0)
    <!-- список ошибок -->
    <div class="alert alert-danger">
        <p>
            <strong>something went wrong</strong>
        </p>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif