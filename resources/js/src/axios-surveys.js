import axios from 'axios';

const instance = axios.create({
    baseURL: 'http://survey.test/api/surveys'
});

export default instance;
