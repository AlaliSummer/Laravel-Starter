
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body class="antialiased">
        <div>
            <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                <div>
                    @csrf
                    <h1 style="color:navy;margin:auto;text-align:center;">Upload Files</h1>
                    <input type="file" name="myup"/>
                    <button>Submit</button>
                </div>
            </form>
        </div>
    </body>

</html>
