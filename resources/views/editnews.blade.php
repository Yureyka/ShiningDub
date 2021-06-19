<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>ShiningDub | Редактирование видео</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/cwe7twr6nie398r8lke79xaepaov2ier7coo9oiylqt1ohpx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <div class="container">
        @include('header')
        <main class="row">
            <section class="col-md-12">
                <div class="content-block">
                    <h1 class="content-title">Редактирование новости</h1>
                    <form class="admin-form" action="{{ route('update-news', $data->id) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                        <input type="text" name="title" placeholder="Название" value="{{ $data->title }}" required>
                        <textarea name="desc" class="tinymce-editor news-editor">{{ $data->desc }}</textarea>
                        <button type="submit" class="button">Принять</button>
                    </form>
                </div>
            </section>
        </main>
        @include('footer')
    </div>
    @include('scrollup')
    <script src="{{ asset('js/menu.js') }}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 400,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | media image link',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
</body>

</html>