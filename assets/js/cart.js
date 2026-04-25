document.addEventListener("DOMContentLoaded", function () {
    const body = document.getElementById("cart-body");
    const totalEl = document.getElementById("cart-total");

    const prices = {
        glazing_milk: 32,
        barrier_restore_cream: 32,
        peptide_glazing_fluid: 32,
        pineapple_cleanser: 30,
        espresso_lip_tint: 20,
        raspberry_jelly_lip_tint: 20,
        ribbon_lip_tint: 20,
        toast_lip_tint: 20,
        sprinkle_blush: 25,
        sun_soak_blush: 25,
        peptide_lip_shape: 24,
        peptide_lip_shape_set: 60,
        scented_espresso_lip_tint: 20,
        scented_raspberry_jelly_lip_tint: 20,
        scented_ribbon_lip_tint: 20,
        scented_toast_lip_tint: 20
    };

    function render() {
        body.innerHTML = "";
        let total = 0;
        let hasItems = false;

        for (let i = 0; i < localStorage.length; i++) {
            const key = localStorage.key(i);

            if (!key.startsWith("cart_")) continue;

            hasItems = true;
            const name = key.replace("cart_", "");
            const qty = Number(localStorage.getItem(key));
            const price = prices[name] || 0;
            const sub = qty * price;
            total += sub;

            body.innerHTML += `
                <tr>
                    <td><button class="remove-btn" data-k="${key}">X</button></td>
                    <td>${name.replace(/_/g, " ")}</td>
                    <td>$${price}</td>
                    <td>
                        <input type="number" min="1" value="${qty}" data-k="${key}">
                    </td>
                    <td>$${sub.toFixed(2)}</td>
                </tr>
            `;
        }

        if (!hasItems) {
            body.innerHTML = `<tr><td colspan="5">Cart is empty</td></tr>`;
        }

        totalEl.innerText = `$${total.toFixed(2)}`;

    }

    body.addEventListener("click", e => {
        if (e.target.tagName === "BUTTON") {
            localStorage.removeItem(e.target.dataset.k);
            render();
        }
    });

    body.addEventListener("change", e => {
        if (e.target.type === "number") {
            localStorage.setItem(e.target.dataset.k, e.target.value);
            render();
        }
    });

    render();
});
