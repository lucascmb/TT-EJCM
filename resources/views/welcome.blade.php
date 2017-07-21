<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

h1{
    text-align: center;
    font-family: "Roboto", sans-serif;
}

</style>
</head>
<body>

    <h1>LISTA DE ALUNOS</h1>

<table>
  <tr>
    <th>Nome do Aluno</th>
    <th>E-mail</th>
    <th>DRE</th>
<!--     <th>Orientador</th> -->
  </tr>
    @foreach($students as $student)
      <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->DRE }}</td>
<!--         @foreach($teachers as $teacher)
            @if($teacher->id == $student->teacher_id)
                <td>{{ $teacher->name }}</td>
            @endif
        @endforeach -->
      </tr>
    @endforeach
</table>

    <h3>ADICIONAR ALUNO</h1>

    <form action = "{{ action('StudentController@store') }}" method = "POST">
        {{ csrf_field() }}
        <label>Nome do Aluno</label>
        <input name = "name", id = "name">
        <br>
        <label>DRE</label>
        <input name = "DRE", id = "DRE">
        <br>
        <label>email</label>
        <input name = "email", id = "email">
        <br>
<!--         <label>Orientador</label>
        <select name = "teacher_id" id = "teacher_id">
            @foreach($teachers as $teacher)
                <option value = "{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
        </select> -->
        <br>
        <input type = "submit" value = "Criar">
    </form>

<!--     <h3>ADICIONAR PROFESSOR</h1>

    <form action = "{{ action('TeacherController@store') }}" method = "POST">
        {{ csrf_field() }}
        <label>Nome do Professor</label>
        <input name = "name", id = "name">
        <br>
        <input type = "submit" value = "Criar">
    </form> -->


</body>
</html>
