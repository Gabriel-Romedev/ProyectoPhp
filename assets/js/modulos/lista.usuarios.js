var vista = {
    controles: {
        tbodyListaUsuarios: $('#tablaListaUsuarios tbody')
    },

    init: function () {
        vista.eventos();
        vista.peticiones.listarUsuarios();
        vista.peticiones.eliminarPorId();
    },

    eventos: function () {},
    callbacks: {
        eventos: {},
        peticiones: {
            listarUsuarios: {
                beforeSend: function () {
                    var tbody = vista.controles.tbodyListaUsuarios;
                    tbody.html(vista.utils.templates.consultando());
                },
                completo: function (respuesta) {
                    var tbody = vista.controles.tbodyListaUsuarios;
                    var datos = __app.parsearRespuesta(respuesta);
                    if (datos && datos.length > 0) {
                        tbody.html('');
                        for (var i = 0; i < datos.length; i++) {
                            var dato = datos[i];
                            tbody.append(vista.utils.templates.item(dato));
                        }
                    } else {
                        tbody.html(vista.utils.templates.noHayRegistros)
                    }
                }
            }

        }
    },
    peticiones: {
        listarUsuarios: function () {
            __app.get(RUTAS_API.USUARIOS.LISTAR)
                .beforeSend(vista.callbacks.peticiones.listarUsuarios.beforeSend)
                .success(vista.callbacks.peticiones.listarUsuarios.completo)
                .error(vista.callbacks.peticiones.listarUsuarios.completo)
                .send();
        },
        eliminarPorId: function (id) {
            __app.post(RUTAS_API.USUARIOS.ELIMINAR_USUARIO, {
                    idUsuario: id,
                })
                .beforeSend(vista.callbacks.peticiones.beforeSend)
                .complete(vista.callbacks.peticiones.completo)
                .success(vista.callbacks.peticiones.finalizado)
                .error(vista.callbacks.peticiones.finalizado)
                .send();
        }

    },
    utils: {
        templates: {
            item: function (obj) {
                return (
                    "<tr>" +
                    "<td>" + obj.name + "</td>" +
                    "<td>" + obj.adress + "</td>" +
                    "<td>" + obj.phone + "</td>" +
                    "<td>" + obj.email + "</td>" +
                    "<td>" +
                    '<a href="' + __app.urlTo('/usuarios/form/edicion/') + btoa(obj.id) + '" class="btn-accion editar">Editar</a>' +
                    "  |  " +
                    '<a href="' + __app.urlTo('usuarios/eliminar/') + btoa(obj.id) + '" class="btn-accion eliminar">Eliminar</a>' +
                    "</td>" +
                    "<tr>"
                );
            },
            consultando: function () {
                return '<tr><td colspan="6">Consultando...</td></tr>';
            },
            noHayRegistros: function () {
                return '<tr><td colspan="6">No hay Registros...</td></tr>';
            },
        },
    },
};

$(vista.init);