import React from 'react';
import './OrderPane.scss';

const OrderPane = ({order}) => {
    return (
        <div className={`order-pane ${order.category ? 'order-pane--active' : 'order-pane--inactive'}`}>
            <h2 className="order-pane__heading">Your order:</h2>
            <ul>
                {order.category && <li>Category: <b>{order.category}</b></li>}
                {order.service && <li>Service: <b>{order.service}</b></li>}
                {order.time && <li>Time: <b>{order.time}</b></li>}
            </ul>
        </div>
    );
}

export default OrderPane;