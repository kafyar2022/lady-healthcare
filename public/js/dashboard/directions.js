document.addEventListener('click', (evt) => {
  if (evt.target.dataset.action === 'delete') {
    evt.target.closest('tr')
      .innerHTML = `
      <td colspan="2">Вы уверены что хотите удалить?</td>
      <td><a data-action="cancel">Отмена</a></td>
      <td><a href="/admin/directions/delete/${evt.target.dataset.id}">Удалить</a></td>
    `;
  }
  if (evt.target.dataset.action === 'cancel') {
    location.reload();
  }
  if (evt.target.dataset.action === 'edit') {
    evt.target.closest('tr')
      .innerHTML = `
      <td colspan="2">
        <input type="text" placeholder="Направление" value="${evt.target.dataset.direction}">
      </td>
      <td><a data-action="cancel">Отмена</a></td>
      <td data-action="update" data-id="${evt.target.dataset.id}" style="cursor: pointer;">Редактировать</td>
    `;
  }
  if (evt.target.dataset.action === 'update') {
    const title = evt.target.closest('tr').querySelector('input').value;
    const id = evt.target.dataset.id

    window.location.href = `/admin/directions/update?id=${id}&title=${title}`;
  }
});
