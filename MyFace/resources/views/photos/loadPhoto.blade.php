
<div>
    <form enctype="multipart/form-data" method="post" action="{{route('upload-photo', ['id' => 77777777777])}}">
        <label class="btn btn-primary m-0" for="my-file-selector">
            <input id="my-file-selector" type="file" style="display:none;" accept="image/*">
            Выбрать фотографию
        </label>
        <button class="btn btn-primary">Загрузить</button>
    </form>
</div>
