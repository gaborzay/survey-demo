import React, {Component} from 'react';
import axios from '../../axios-surveys';
import Layout from '../../hoc/Layout/Layout';
import Button from '../../components/UI/Button/Button';

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            surveys: [],
            links: null
        };
    }

    componentDidMount() {
        this.getSurveyData();
    }

    getSurveyData(link = '') {
        axios.get(link)
            .then(response => {
                this.setState({
                    surveys: response.data,
                    links: response.data.links
                });
                console.log(response)
            })
            .catch(error => {
                console.log(error)
            });
    }

    buttonClickHandler(link) {
        this.getSurveyData(link);
    };

    render() {
        let surveys = null;
        let first = null;
        let last = null;
        let prev = null;
        let next = null;

        if (this.state.links) {
            first = <Button
                disabled={this.state.links.prev}
                clicked={() => this.buttonClickHandler(this.state.links.first)}
                text={"First"}/>;
            prev = <Button
                disabled={this.state.links.prev}
                clicked={() => this.buttonClickHandler(this.state.links.prev)}
                text={"Prev"}/>;
            next = <Button
                disabled={this.state.links.next}
                clicked={() => this.buttonClickHandler(this.state.links.next)}
                text={"Next"}/>;
            last = <Button
                disabled={this.state.links.next}
                clicked={() => this.buttonClickHandler(this.state.links.last)}
                text={"Last"}/>;
        }

        if (this.state.surveys.data) {
            surveys = this.state.surveys.data.map(survey => {
                return (
                    <tr>
                        <th id={survey.id} scope="row"><a href="#">#</a></th>
                        <td>{survey.name}</td>
                        <td>{survey.country}</td>
                        <td>{survey.rating}</td>
                    </tr>
                );
            });
        }

        return (
            <div className={"App"}>
                <Layout>
                    <div className="row justify-content-center">
                        <div className="col-md-12">
                            <table className="table">
                                <thead className="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                {surveys}
                                </tbody>
                            </table>
                            {first}
                            {prev}
                            {next}
                            {last}
                        </div>
                    </div>
                </Layout>
            </div>
        );
    }
}

export default App;
