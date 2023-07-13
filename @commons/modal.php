<div class="modal-form">
    <div class="modal-form-close"></div>
    <div class="modal-form-content">

        <div class="top-line">
            <h2>Зв’язатися з нами</h2>
            <img class="close-modal" src="<?= SERVER_URL ?>assets/images/icons/close.svg" alt="close">
        </div>

        <form class="modal-form">

            <div class="name-field">
                <label for="name"></label>
                <input placeholder="ІМ'Я" type="text" id="name" name="name" minlength="2">
            </div>

            <div class="number-field">
                <label for="number"></label>
                <input placeholder="ТЕЛЕФОH" type="number" id="number" name="number" min="10" max="100">
            </div>

            <div class="text-field">
                <label for="message"></label>
                <textarea placeholder="Повідомлення" id="message" name="message" rows="4" cols="50"></textarea>
            </div>

            <button class="send" type="submit" value="Submit" onclick="return false;">
                Надіслати
            </button>

        </form>

    </div>
</div>