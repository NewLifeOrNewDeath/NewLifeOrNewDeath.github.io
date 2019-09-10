<form  class="contact_form" action="" id="contact_form" runat="server">
  <div>
    <ul>
      <li> 
       <h2>Contactos</h2>
         <span class="required_notification">* Datos requeridos</span>
      </li>
      <li>
        <label for="name">Nombre:</label>
          <input type="text" placeholder="Carlos Rosendo Gutierrez" required />
     </li>
      <li>
        <label for="email">Email:</label>
          <input type="email" name="email" placeholder="nombre@algo.com" required />
            <span class="form_hint">Formato correcto: "nombre@algo.com"</span>
      </li>
      <li>
        <label for="website">Sitio web:</label>
          <input type="url" name="website" placeholder="http://algo.com" required pattern="(http|https)://.+" />
            <span class="form_hint">Formato correcto: "http://algo.com"</span>
      </li>
        <li>
          <label for="message">Mensaje:</label>
            <textarea name="message" cols="40" rows="6" required></textarea>
        </li>
        <li>
        <button class="submit" type="submit">Enviar mensaje</button>
        </li>
    </ul> 
 </div>
</form> 