var hash = window.location.hash;

function getIcon() {
    if (hash == "#docente") {
        document.getElementById("icono").innerHTML +=
            '<h3 class="titulo text-center">Registro Docente</h3>' +
            '<i class="fa-solid fa-chalkboard-user fa-5x"></i>';
    } else if (hash == "#alumno") {
        document.getElementById("icono").innerHTML +=
            '<h3 class="titulo text-center">Registro Alumno</h3>' +
            '<i class="fa-solid fa-graduation-cap fa-5x"></i>';
    } else if (hash == "#visitante") {
        document.getElementById("icono").innerHTML +=
            '<h3 class="titulo text-center">Registro Visitante</h3>' +
            '<i class="fa-solid fa-rocket fa-5x"></i>';
    }
}

function getFormulario() {
    if (hash == "#docente") {
        // Campos por defecto
    } else if (hash == "#alumno") {
        document.getElementById("formulario").innerHTML +=
            '<div class="inputContainer">' +
            '    <input name="no_control" type="text" id="noControl" class="input-registro" placeholder="a" />' +
            '    <label id="lblnc" class="labelform">' +
            '    <i class="fa-solid fa-id-card"></i> No. Control:' +
            '    </label>' +
            '</div>' +
            '<p class="labelformErrorAct" id="lblnoControl">El no. Control ya se encuentra registrado</p>' +
            '<select name="id_carrera" id="carrera" class="fullselect">' +
            '    <option value="1">Licenciatura en Administracion</option>' +
            '    <option value="2">Ingeniería Ambiental</option>' +
            '    <option value="3">Ingeniería Bioquímica</option>' +
            '    <option value="4">Ingeniería Electrónica</option>' +
            '    <option value="5">Ingeniería en Gestión Empresarial</option>' +
            '    <option value="6" selected>Ingeniería Industrial</option>' +
            '    <option value="7">Ingeniería Mecánica</option>' +
            '    <option value="8">Ingeniería Mecatrónica</option>' +
            '    <option value="9">Ingeniería en Sistemas Computacionales</option>' +
            '    <option value="10">Ingeniería Química</option>' +
            '</select>' +
            '<select name="id_semestre" id="semestre" class="fullselect">' +
            '    <option value="1">1er Semestre</option>' +
            '    <option value="2">2do Semestre</option>' +
            '    <option value="3">3er Semestre</option>' +
            '    <option value="4">4to Semestre</option>' +
            '    <option value="5">5to Semestre</option>' +
            '    <option value="6">6to Semestre</option>' +
            '    <option value="7">7mo Semestre</option>' +
            '    <option value="8">8vo Semestre</option>' +
            '    <option value="9">9no Semestre</option>' +
            '    <option value="10">10mo Semestre</option>' +
            '    <option value="11">11vo Semestre</option>' +
            '    <option value="12">12vo Semestre</option>' +
            '    <option value="o">otro</option>' +
            '</select>';
    } else if (hash == "#visitante") {
        document.getElementById("formulario").innerHTML +=
            '<div class="inputContainer">' +
            '    <input name="institucion" id="institucion" type="text" class="input-registro" id="visitante" placeholder="a" />' +
            '    <label id="lblin" class="labelform" >' +
            '    <i class="fa-solid fa-user"></i> Institución:' +
            '    </label>' +
            '</div>' +
            '<p class="labelformErrorAct" id="lblInst">Llene este campo</p>';
    }

}