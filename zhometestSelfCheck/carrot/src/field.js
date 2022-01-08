'use strict'

import * as sound from './sound.js'

const POKETMON_SIZE = 80;

export default class Field {
    constructor(pikachuCount, zubatCount) {
        this.pikachuCount = pikachuCount;
        this.bugCount = zubatCount;
        this.field = document.querySelector(".game__field");
        this.fieldRect = this.field.getBoundingClientRect();
        this.field.addEventListener("click", this.onClick);
    }

    
    setClickListener(onItemClick) {
        this.onItemClick = onItemClick;
    }


    init() {
        this.field.innerHTML = '';
        this._addItem('pikachu', this.pikachuCount, 'img/pikachu.png')
        this._addItem('zubat', this.bugCount, 'img/zubat.png')
    }


    _addItem = (className, count, imgName) => {
        for (let i = 0; i < count; i++) {
            const item = document.createElement("img");
            item.setAttribute('class', className);
            item.src = imgName;
            item.style.position = 'absolute';
            const x1 = 0;
            const y1 = 0;
            const x2 = this.fieldRect.width - POKETMON_SIZE;
            const y2 = this.fieldRect.height - POKETMON_SIZE;
            const x = randomNumber(x1, x2);
            const y = randomNumber(y1, y2);
            item.style.left = `${x}px`;
            item.style.top = `${y}px`;
            this.field.appendChild(item);
        }
    }

    onClick = e => {
        const target = e.target;
        if (target.matches('.pikachu')) {
            target.remove();
            sound.playCarrotSound()
            this.onItemClick && this.onItemClick('pikachu');
        } else if (target.matches('.zubat')) {
            this.onItemClick && this.onItemClick('zubat');
        }
    }
}

function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}
