import React from 'react';
import './styles.css';
import placaImg from './assets/clock.png';
import './sendMail.php';

function App() {
  return (
    <div className="manu-container">
      <div className="content">
        <section>
          <img src={placaImg} alt="Placa" />
          <h1>Estamos em Manutenção</h1>
          <p>Preencha o formulário ao lado para entrar em contato conosco.</p>
        </section>

        <form action="sendMail.php" method="post" name="form">
          <input name="nome" placeholder="Seu nome" />
          <input type="email" name="email" placeholder="Seu E-mail" />
          <input name="whatsapp" placeholder="Seu WhatsApp" />
          <input name="assunto" placeholder="Assunto" />
          <textarea name="mensagem" placeholder="Digite aqui a sua mensagem" />
          <button className="button" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  );
};

export default App;