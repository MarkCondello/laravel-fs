<template>
<div>
    <h3>Tasks</h3>
    <ul v-if="tasks">
        <li v-for="(task, id) in tasks" :key="id">
            <label :style="{'text-decoration:line-through': task.completed}">
                {{task.description}}
                <input 
                    type="checkbox" 
                    :checked="task.completed" 
                    name="completed"
                    @change="handleCheckbox(task)"
                />
            </label>
        </li>
    </ul>
</div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'Project-Tasks',
    props: {
        getUrl: {
            type: String,
        }
    },
    data(){
        return {
            tasks: [],
        }
    },
    created(){
        this.getTasks();
    },
    methods: {
        getTasks(){
            if(this.getUrl){
                axios.get(this.getUrl)
                .then(resp => this.tasks = resp.data)
                .catch(console.error)
            }
        },
        handleCheckbox(task){
            //get id and completed status to determine endpoint
            console.log('Reached handleCheckbox', task);
            if(task.completed){
                axios
                .post('/task-incomplete/' + task.id, {task: task})
                .then(resp =>  { console.log("Task incomplete request:", resp)})
                .catch(console.error)     
            } else {
                axios
                .post('/completed-task/' + task.id, {task: task})
                .then(resp =>  { 
                    console.log("Task completed request:", resp);

                    })
                .catch(console.error)
            }

        }
    }
}
</script>