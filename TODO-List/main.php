<div class="container">
        <h2>
            <span>To Do</span>
            <span class="mask-num">{{ needDoList.length }}</span>
        </h2>
        <ul class="mask-list">
            <li v-for="(mask, index) in needDoList" :key="mask.id">
                <div>
                    <input type="checkbox" v-on:change="doCheck(index, 'need')">
                    <span>{{mask.title}}</span>
                </div>
                <button class="btn-remove" v-on:click="removeMask(index, 'need')">Remove</button>
            </li>
        </ul>
        <h2>
            <span>Done</span>
            <span class="mask-num">{{ completeList.length }}</span>
        </h2>
        <ul class="mask-list complete-list">
            <li v-for="(mask, index) in completeList" :key="mask.id">
                <div>
                    <input type="checkbox" v-on:change="doCheck(index, 'complete')" checked>
                    <span>{{mask.title}}</span>
                </div>
                <button class="btn-remove" v-on:click="removeMask(index, 'complete')">Remove</button>
            </li>
        </ul>
    </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="app.js"></script>