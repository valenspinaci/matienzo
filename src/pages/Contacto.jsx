import fotoContacto from "../assets/img/foto-contacto.png";

const Contacto = () => {
    return (
        <div>
            <div className="col-12 d-flex justify-content-center align-items-center">
                <img className="col-8 my-5" src={fotoContacto} alt="contacto" />
            </div>

            <div className="col-12 d-flex flex-column justify-content-center align-items-center mb-5">
                <form className="col-10 col-md-6 col-lg-4">
                    <div className="mb-3">
                        <label htmlFor="name" className="form-label">Nombre</label>
                        <input
                            type="text"
                            className="form-control inputs-background"
                            id="name"
                            name="name"
                            required
                        />
                    </div>

                    <div className="mb-3">
                        <label htmlFor="lastname" className="form-label">Apellido</label>
                        <input
                            type="text"
                            className="form-control inputs-background"
                            id="lastname"
                            name="lastname"
                            required
                        />
                    </div>

                    <div className="mb-3">
                        <label htmlFor="mail" className="form-label">Mail</label>
                        <input
                            type="email"
                            className="form-control inputs-background"
                            id="mail"
                            name="mail"
                            required
                        />
                    </div>

                    <div className="mb-3">
                        <label htmlFor="comment" className="form-label">Comentario</label>
                        <textarea
                            className="form-control inputs-background"
                            id="comment"
                            name="comment"
                            rows="3"
                            required
                        ></textarea>
                    </div>

                    <button type="submit" className="btn boton-cta p-2 w-100">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    );
};

export default Contacto;