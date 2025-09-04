<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Contacto</title>
<style>
  body {
    font-family: 'Arial', sans-serif;
    background: #f0f4f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .contact-form {
    background: #ffffff;
    padding: 30px 40px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 400px;
  }

  .contact-form h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .contact-form input:focus,
  .contact-form textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
    outline: none;
  }

  .contact-form textarea {
    resize: vertical;
    min-height: 120px;
  }

  .contact-form button {
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .contact-form button:hover {
    background: #0056b3;
  }
</style>
</head>
<body>

  <form class="contact-form">
    <h2>Contáctanos</h2>
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo" required>
    <textarea name="message" placeholder="Escribe tu mensaje..." required></textarea>
    <button type="submit">Enviar</button>
  </form>

</body>
</html>
