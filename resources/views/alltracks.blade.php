var alltracks = [];
@for ($i = 0; $i < count($tracks); $i++)
        temp = {
            id: "{{$tracks[$i]->id}}",
            name: "{{$tracks[$i]->name}}",
            singer: "{{$tracks[$i]->artists->name}}",
            path: "{{$tracks[$i]->link}}",
            image: "{{$tracks[$i]->image}}"
        }
        alltracks.push(temp);
@endfor