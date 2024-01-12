<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mailer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        textarea {
            width: 100%;
            height: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row">
        <form action="{{route('send.sendMail')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control " name="name" id="exampleInputEmail1" value="{{old('name')}}" aria-describedby="emailHelp">
            </div>
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Subject</label>
                <input type="text" class="form-control " name="subject" id="exampleInputEmail1" value="{{old('subject')}}" aria-describedby="emailHelp">
            </div>
            @error('subject')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control " name="email" id="exampleInputEmail1" value="{{old('email')}}" aria-describedby="emailHelp">
            </div>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email CC</label>
                <input type="text" class="form-control " name="cc" id="exampleInputEmail1" value="{{old('cc')}}" aria-describedby="emailHelp">
            </div>
            @error('cc')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">content</label>
                <textarea name="content" class="tinymce-editor form-control" id="textearea"   rows="5">{{ old('content') }}</textarea>
            </div>
            @error('content')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Upload Attachment</label>
{{--                <input type="file" class="form-control " name="file" id="exampleInputEmail2"  aria-describedby="emailHelp">--}}
            </div>
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>

{{-- Begin TinyMCE Text Editor --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 300,
        menubar: true,
        format: 'text',
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script>
@include('sweetalert::alert')
{{-- End TinyMCE Text Editor --}}
</body>
</html>
