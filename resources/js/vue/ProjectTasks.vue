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
    <hr>
    <h3>Create tasks: </h3>
    <label>Task name
        <input type="text" name="description" v-model="taskDescription" />
    </label>
    <button type="submit" class="button bollow" @click.prevent="handleCreateTask">Add task</button>

</div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'Project-Tasks',
    props: {
        getUrl: {
            type: String,
        },
        saveUrl: {
            type: String,
        },
    },
    data(){
        return {
            tasks: [],
            taskDescription: ''
        }
    },
    created(){
        this.getTasks();
    },
    methods: {
        handleCreateTask(){
            if(this.taskDescription != '' && this.saveUrl){
                axios
                .post(this.saveUrl, {description: this.taskDescription})
                .then(resp => {
                    console.log("Description has been saved: ", resp.status);
                    this.taskDescription = '';
                    this.getTasks();
                })
                .catch(console.error)
            }
        },
        getTasks(){
            if(this.getUrl){
                axios
                .get(this.getUrl)
                .then(resp => this.tasks = resp.data)
                .catch(console.error)
            }
        },
        handleCheckbox(task){
            //get id and completed status to determine endpoint
             if(task.completed){
                axios
                .post('/task-incomplete/' + task.id, {task: task})
                .then(resp =>  { console.log("Task incomplete request:", resp.status)})
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