import React,{useState} from 'react';
import MainLayout from "../Components/MainLayout";
const Home = () => {
  const initialProducts = [
    { id: 1, name: 'Product 1', price: 25.00, image: 'product1.jpg', quantity: 1 },
    { id: 2, name: 'Product 2', price: 45.00, image: 'product2.jpg', quantity: 1 },
  ];

  // State to hold cart items
  const [cart, setCart] = useState(initialProducts);

  // Function to update the quantity of a product
  const updateQuantity = (id, action) => {
    setCart(prevCart => 
      prevCart.map(item => 
        item.id === id 
          ? { ...item, quantity: action === 'increase' ? item.quantity + 1 : item.quantity - 1 } 
          : item
      )
    );
  };

  // Function to remove an item from the cart
  const removeItem = (id) => {
    setCart(prevCart => prevCart.filter(item => item.id !== id));
  };

  // Function to calculate the total price of the cart
  const calculateTotal = () => {
    return cart.reduce((total, item) => total + item.price * item.quantity, 0).toFixed(2);
  };
  return (
    <>
        <MainLayout>
        <div id="cart-container">
      <h2>Your Shopping Cart</h2>
      
      <div id="cart-items">
        {cart.map(item => (
          <div key={item.id} className="cart-item">
            <img src={item.image} alt={item.name} className="cart-item-img" />
            <div className="cart-item-details">
              <h3 className="cart-item-title">{item.name}</h3>
              <p className="cart-item-price">${item.price.toFixed(2)}</p>
              <div className="cart-item-quantity">
                <button className="quantity-btn decrease" onClick={() => updateQuantity(item.id, 'decrease')}>-</button>
                <span className="quantity">{item.quantity}</span>
                <button className="quantity-btn increase" onClick={() => updateQuantity(item.id, 'increase')}>+</button>
              </div>
            </div>
            <button className="remove-btn" onClick={() => removeItem(item.id)}>Remove</button>
          </div>
        ))}
      </div>
      
      <div id="cart-total">
        <p><strong>Total:</strong> ${calculateTotal()}</p>
      </div>
      
      <button id="checkout-btn">Proceed to Checkout</button>
    </div>
            
        </MainLayout>
    </>
  );
};

export default Home;