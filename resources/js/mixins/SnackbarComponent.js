import Snackbar from '../components/dialoges/Snackbar';
export default {
    components: {Snackbar},
    data() {
        return {
            snackbar: {
                active: false,
                color: '',
                message: ''
            }
        }
    },
    methods: {
        activateSnackbar(color, message) {
            this.snackbar.color = color;
            this.snackbar.message = message;
            this.snackbar.active = true;
        },
        deactivateSnackbar() {
            this.snackbar.active = false;
            this.snackbar.color = '';
            this.snackbar.message = '';
        }
    }
}