@extends('layouts.app')

@section('js')
<script>
    const quill = new Quill('#editor', {
        theme: 'snow'
    });

    quill.on('text-change', (delta, oldDelta, source) => {
        console.log(JSON.stringify(quill.getContents()));
    });

    function submitText()
    {
        axios.post('save_text.php', { formatted_text: formattedText })
        .then(function (response) {
            console.log('Formatted text saved successfully!');
        })
        .catch(function (error) {
            console.error('Error saving formatted text:', error);
        });
    }

</script>
@endsection

@section('content')
    <div id="editor">
        <p>Hello World!</p>
        <p>Some initial <strong>bold</strong> text</p>
        <p><br /></p>
    </div>
@endsection
