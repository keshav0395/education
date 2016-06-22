
@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br />
    </div>
@endif