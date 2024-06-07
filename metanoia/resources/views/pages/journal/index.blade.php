@extends('layouts.app')

@section('js')
<script>
    const quill = new Quill('#editor', {
        theme: 'bubble'
    });

    var journals = {!! json_encode($journals) !!};

    if (journals.length > 0) {
        quill.setContents(JSON.parse(journals[0]?.content).ops);
    }
    
    quill.on('text-change', (delta, oldDelta, source) => {
        submitText(JSON.stringify(quill.getContents()))
    });

    function submitText(content)
    {
        $.ajax({
          url: "/journal",
          type: 'POST',
          data: { id: '1', content: content },
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(data) {
            $('#response').html(JSON.stringify(data));
          },
          error: function(xhr, status, error) {
            $('#response').html('Error: ' + error);
          }
        });
    }

</script>
@endsection

@section('content')
    <div id="editor"></div>
@endsection
